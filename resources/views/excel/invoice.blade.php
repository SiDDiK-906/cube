<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Cart Total</th>
        <th>Discount Total</th>
        <th>Sub Total</th>
        <th>Shipping Total</th>
        <th>Grand Total</th>
        <th>Payment Option</th>
    </tr>
    </thead>
    <tbody>
    @foreach($invoices as $invoice)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $invoice->cart_total }}</td>
            <td>{{ $invoice->discount_total }}</td>
            <td>{{ $invoice->sub_total }}</td>
            <td>{{ $invoice->shipping }}</td>
            <td>{{ $invoice->grand_total }}</td>
            <td>
                @if ($invoice->payment_option == 1)
                    Cash On Delivary
                @else
                    Online Payment
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
