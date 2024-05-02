<style>
    .create-form {
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .create-form span {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .create-form input[type="text"],
    .create-form input[type="number"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box; /* Garante que o padding não altere a largura do campo */
    }

    .create-form button {
        padding: 10px 20px;
        background-color: #4CAF50; /* verde */
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .create-form button:hover {
        background-color: #45a049; /* tom mais escuro de verde ao passar o mouse */
    }
</style>

<div class="create-form">
    <form action="{{ route('animal.store') }}" method="POST">
        @csrf
        <span>Nome do animal:</span>
        <input type="text" name="name" placeholder="Digite o nome do animal">
        <span>Idade:</span>
        <input type="number" name="age" placeholder="Digite a idade do animal">
        <span>Espécie:</span>
        <input type="text" name="species" placeholder="Digite a espécie do animal">
        <span>Classe:</span> 
        <input type="text" name="class" placeholder="Digite a classe do animal">

        <button type="submit">Criar!</button>
    </form>
</div>
