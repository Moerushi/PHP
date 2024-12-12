<p>Список пользователей в хранилище</p>

<ul id="navigation">
    {% for user in users %}
        <li><p>{{ user.getUserName() }} {{ user.getUserLastName() }}. День рождения: {{ user.getUserBirthday() | date('d.m.Y') }}</p></li>
    {% endfor %}
</ul>