@if (count($bill_query) > 0)
    <ul>
        @foreach ($bill_query as $result)
            <li>{{ $result->route_code }}</li>
        @endforeach
    </ul>
@else
    <p>No results found.</p>
@endif
