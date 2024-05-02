<style>
    .animal-list {
        list-style-type: none;
        padding: 0;
        margin: 20px 0;
    }

    .animal-list li {
        margin-bottom: 10px;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
        background-color: #f9f9f9;
        display: flex;
        justify-content: space-between;
    }

    .animal-actions {
        display: flex;
        gap: 10px;
    }

    .btn-edit, .btn-delete {
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .btn-edit {
        background-color: #4CAF50;
        color: white;
    }

    .btn-delete {
        background-color: #f44336;
        color: white;
    }

    .btn-create {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50; /* verde */
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-create:hover {
        background-color: #45a049; /* tom mais escuro de verde ao passar o mouse */
    }


    .btn-show {
        display: inline-block;
        padding: 5px 10px;
        background-color: #007bff; /* azul */
        color: white;
        text-decoration: none;
        border-radius: 3px;
        transition: background-color 0.3s ease;
    }

    .btn-show:hover {
        background-color: #0056b3; /* tom mais escuro de azul ao passar o mouse */
    }
</style>

<ul class="animal-list">
    @foreach($animal as $item)
        <li>
            <span>{{ $item->name }}</span>
            <div class="animal-actions">
                <a href="{{ route('animal.show', $item->id) }}" class="btn-show">Show</a>
                <a href="{{ route('animal.edit', $item->id) }}" class="btn-edit">Edit</a>
                <form action="{{ route('animal.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete">Delete</button>
                </form>
            </div>
        </li>
    @endforeach
</ul>
<a href="{{ route('animal.create') }}" class="btn-create">Crie um animal</a>
