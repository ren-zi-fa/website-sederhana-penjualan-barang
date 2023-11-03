<x-main-layout>

    <button id="pay-button" type="submit" class=" btn btn-primary">Pay!</button>

    <form action="" method="POST" id="submit_form">
        @csrf
        @method('POST')
        <input type="hidden" name="json" id="payment_hidden">
    </form>
</x-main-layout>