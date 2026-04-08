<?php

namespace Webkul\Iyzico\Repositories;

use Webkul\Core\Eloquent\Repository;

class IyzicoTransactionRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return \Webkul\Iyzico\Contracts\IyzicoTransaction::class;
    }

    /**
     * Find a transaction by its unique token.
     */
    public function findByToken(string $token): ?\Webkul\Iyzico\Models\IyzicoTransaction
    {
        return $this->findOneByField('token', $token);
    }

    /**
     * Find a transaction by its conversation ID.
     */
    public function findByConversationId(string $conversationId): ?\Webkul\Iyzico\Models\IyzicoTransaction
    {
        return $this->findOneByField('conversation_id', $conversationId);
    }
}
