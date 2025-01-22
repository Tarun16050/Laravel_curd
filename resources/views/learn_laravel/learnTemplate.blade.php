
@include('learn_laravel.header')
<h1>Hello Tarun</h1>
{{ 5 + 2 }}
{!! "<script>alert('Traun patidar');</script>" !!}
@php
    $name = 'Tarun';
    $name_array = ['Tarun', 'Patidar', 'Rahul', 'Patidar'];
    $items = ['Item 1', 'Item 2', 'Item 3', 'Item 4'];
@endphp
</br>
{{ $name }}
</br></br>
<h1>For Loop</h1>
<ul>
    @foreach ($name_array as $nam)
        <li>{{ $nam }}</li>
    @endforeach
</ul>
<div class="container mt-5">
    <h2>Loop Properties Combined Table</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Property</th>
                <th>Description</th>
                @foreach ($items as $item)
                    <th>Iteration {{ $loop->iteration }} ({{ $item }})</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>$loop->index</td>
                <td>The index of the current loop iteration (starts at 0).</td>
                @foreach ($items as $item)
                    <td>{{ $loop->index }}</td>
                @endforeach
            </tr>
            <tr>
                <td>$loop->iteration</td>
                <td>The current loop iteration (starts at 1).</td>
                @foreach ($items as $item)
                    <td>{{ $loop->iteration }}</td>
                @endforeach
            </tr>
            <tr>
                <td>$loop->remaining</td>
                <td>The iterations remaining in the loop.</td>
                @foreach ($items as $item)
                    <td>{{ $loop->remaining }}</td>
                @endforeach
            </tr>
            <tr>
                <td>$loop->count</td>
                <td>The total number of items in the array being iterated.</td>
                @foreach ($items as $item)
                    <td>{{ $loop->count }}</td>
                @endforeach
            </tr>
            <tr>
                <td>$loop->first</td>
                <td>Whether this is the first iteration through the loop.</td>
                @foreach ($items as $item)
                    <td>{{ $loop->first ? 'Yes' : 'No' }}</td>
                @endforeach
            </tr>
            <tr>
                <td>$loop->last</td>
                <td>Whether this is the last iteration through the loop.</td>
                @foreach ($items as $item)
                    <td>{{ $loop->last ? 'Yes' : 'No' }}</td>
                @endforeach
            </tr>
            <tr>
                <td>$loop->even</td>
                <td>Whether this is an even iteration through the loop.</td>
                @foreach ($items as $item)
                    <td>{{ $loop->even ? 'Yes' : 'No' }}</td>
                @endforeach
            </tr>
            <tr>
                <td>$loop->odd</td>
                <td>Whether this is an odd iteration through the loop.</td>
                @foreach ($items as $item)
                    <td>{{ $loop->odd ? 'Yes' : 'No' }}</td>
                @endforeach
            </tr>
            <tr>
                <td>$loop->depth</td>
                <td>The nesting level of the current loop.</td>
                @foreach ($items as $item)
                    <td>{{ $loop->depth }}</td>
                @endforeach
            </tr>
            <tr>
                <td>$loop->parent</td>
                <td>When in a nested loop, the parent's loop variable.</td>
                @foreach ($items as $item)
                    <td>{{ $loop->parent ? $loop->parent->index : 'N/A' }}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>


@include('learn_laravel.footer')
@includeIf('learn_laravel.footer')
{{-- @includeWhen (Condition Value,'viewfile', ['status' => 'Hello']) --}}
