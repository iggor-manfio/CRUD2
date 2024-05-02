
<style>
    .animal-info {
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .animal-info h2 {
        margin-bottom: 10px;
    }

    .animal-info p {
        margin-bottom: 5px;
    }
</style>

<div class="animal-info">
    <h2>Informações do Animal</h2>
    <p><strong>Nome:</strong> {{$animal->name}}</p>
    <p><strong>Idade:</strong> {{$animal->age}}</p>
    <p><strong>Classe:</strong> {{$animal->class}}</p>
    <p><strong>Espécie:</strong> {{$animal->species}}</p>
</div>
