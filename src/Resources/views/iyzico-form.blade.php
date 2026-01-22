<x-shop::layouts
    :has-header="false"
    :has-feature="false"
    :has-footer="false"
>
    <x-slot:title>
        @lang('iyzico::app.resources.title')
    </x-slot>
</x-shop::layouts>

{!! $paymentForm !!}
<div id="iyzipay-checkout-form" class="responsive">
    @csrf
</div>
