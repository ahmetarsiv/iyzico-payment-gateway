<?php

namespace Webkul\Iyzico\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Webkul\Checkout\Models\Cart;
use Webkul\Customer\Models\Customer;
use Webkul\Iyzico\Contracts\IyzicoTransaction as IyzicoTransactionContract;
use Webkul\Sales\Models\Order;

class IyzicoTransaction extends Model implements IyzicoTransactionContract
{
    /**
     * The table associated with the model.
     */
    protected $table = 'iyzico_transactions';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'token',
        'conversation_id',
        'cart_id',
        'customer_id',
        'order_id',
        'status',
        'payment_id',
        'payment_transaction_id',
        'amount',
        'currency',
    ];

    /**
     * Transaction status constants.
     */
    const STATUS_PENDING    = 'pending';
    const STATUS_PROCESSING = 'processing';
    const STATUS_COMPLETED  = 'completed';
    const STATUS_FAILED     = 'failed';

    /**
     * Get the cart associated with this transaction.
     */
    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }

    /**
     * Get the customer associated with this transaction.
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Get the order associated with this transaction.
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Check if the transaction is pending.
     */
    public function isPending(): bool
    {
        return $this->status === self::STATUS_PENDING;
    }

    /**
     * Check if the transaction is completed.
     */
    public function isCompleted(): bool
    {
        return $this->status === self::STATUS_COMPLETED;
    }

    /**
     * Mark the transaction as completed.
     */
    public function markAsCompleted(int $orderId, ?string $paymentId = null, ?string $paymentTransactionId = null): void
    {
        $this->update([
            'status'                 => self::STATUS_COMPLETED,
            'order_id'               => $orderId,
            'payment_id'             => $paymentId,
            'payment_transaction_id' => $paymentTransactionId,
        ]);
    }

    /**
     * Mark the transaction as failed.
     */
    public function markAsFailed(): void
    {
        $this->update([
            'status' => self::STATUS_FAILED,
        ]);
    }
}
