@foreach ($members as $item)
    <tr>
        <td>{{ $item->firstname }}</td>
        <td>{{ $item->lastname }}</td>
        <td>
            <a href='#' class='btn btn-success edit' data-id='{{ $item->id }}' data-first='{{ $item->firstname }}' data-last='{{ $item->lastname }}'> Edit</a> 
            <a href='#' class='btn btn-danger delete' data-id='{{ $item->id }}'> Delete</a>
        </td>
    </tr>
@endforeach