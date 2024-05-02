<style>
    .edit-form {
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .edit-form input[type="text"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box; /* Garante que o padding não altere a largura do campo */
    }

    .edit-form button {
        padding: 10px 20px;
        background-color: #4CAF50; /* verde */
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .edit-form button:hover {
        background-color: #45a049; /* tom mais escuro de verde ao passar o mouse */
    }
</style>

<div class="edit-form">
    <form action="{{ route('animal.update', $animal->id) }}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" name="name" value="{{ $animal->name }}" placeholder="Nome do animal">
        <input type="text" name="age" value="{{ $animal->age }}" placeholder="Idade do animal">
        <input type="text" name="name" value="{{ $animal->species}}" placeholder="Nome do animal">
        <input type="text" name="age" value="{{ $animal->class}}" placeholder="Idade do animal">
        <button type="submit">Salvar</button>
    </form>
</div>
