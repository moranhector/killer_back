<div class="table-responsive">
    <table class="table" id="albums-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Spotify Id</th>
        <th>Release Date</th>
        <th>Tipo</th>
        <th>Market</th>
        <th>Images</th>
        <th>Total Tracks</th>
        <th>Total Tracks</th>
        <th>Uri</th>
        <th>Genres</th>
        <th>Label</th>
        <th>Popularity</th>
        <th>Productor Id</th>
        <th>Cant Disc</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($albums as $album)
            <tr>
                <td>{{ $album->name }}</td>
            <td>{{ $album->spotify_id }}</td>
            <td>{{ $album->release_date }}</td>
            <td>{{ $album->tipo }}</td>
            <td>{{ $album->market }}</td>
            <td>{{ $album->images }}</td>
            <td>{{ $album->total_tracks }}</td>
            <td>{{ $album->total_tracks }}</td>
            <td>{{ $album->uri }}</td>
            <td>{{ $album->genres }}</td>
            <td>{{ $album->label }}</td>
            <td>{{ $album->popularity }}</td>
            <td>{{ $album->productor_id }}</td>
            <td>{{ $album->cant_disc }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['albums.destroy', $album->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('albums.show', [$album->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('albums.edit', [$album->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
