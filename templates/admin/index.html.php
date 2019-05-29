
<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
{% if is_granted('IS_AUTHENTICATED_FULLY') %}
<div align="center">
    <br>
    <a href="/logout" class="btn btn-primary">Se déconnecter</a>
    <br><br>
    <a href="/adduser" class="btn btn-primary">Ajouter des utilisateurs</a>
    <br><br>
</div>
<table class="table">
    <tr align="center">
        <td>ID</td>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Mail</td>
        <td>Avatar</td>
        <td>Date de naissance</td>
        <td>Date de création</td>
        <td>Date de modification</td>
        <td>Actions</td>
    </tr>

    {% for user in tab %}
    <tr align="center">
        <td>{{ user.id }}</td>
        <td>{{ user.nom | upper }}</td>
        <td>{{ user.prenom | capitalize  }}</td>
        <td>{{ user.email }}</td>
        <td>
            <img src="{{ user.avatar }}" alt="avatar-{{ user.nom | upper }}-{{ user.prenom | capitalize }}" width="40">
        </td>
        <td>{{ user.datenaissance | date('d/m/Y') }}</td>
        <td>{{ user.datecreation | date('d/m/Y') }}</td>
        <td>{{ user.datemodif | date('d/m/Y') }}</td>
        <td>
            <a href="/deluser?id={{ user.id }}" class="btn btn-primary">Supprimer</a>
            <a href="/updateuser?id={{ user.id }}" class="btn btn-primary">Modifier</a>
        </td>
    </tr>
    {% endfor %}
</table>
{% else %}
<script>window.location.href = '/login'</script>
{% endif %}
</body>
</html>