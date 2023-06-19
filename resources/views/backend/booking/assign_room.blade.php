<form action="" method="POST">
    @csrf

    <table class="table">
        <tr>
            <th>Room Number</th>
            <th>Action</th>
        </tr>

        @foreach($room_numbers as $room_number) 
          <tr>
            <td>{{ $room_number->room_no }}</td>
            <td>
                <a href="{{ route('assign_room_store',[$booking->id,$room_number->id]) }}" class="btn bg-primary"><i class="lni lni-circle-plus"></i></a>
            </td>
        </tr>
        @endforeach

    </table>



</form>