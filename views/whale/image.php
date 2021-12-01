<h1>Whale Image : Choose your configuration</h1>
<form action="/whale/container" method="post"
    style="display: flex;justify-content:space-between;flex-direction:column;">
    <div class="input-group">
        <label for="name">Name of container</label>
        <input type="text" name="name" id="name">
    </div>
    <div class="input-group">
        <label for="server">Server</label>
        <select name="server" id="server">
            <option value="apache">Apache</option>
            <option value="nginx">NginX</option>
        </select>
    </div>
    <div class="input-group">
        <label for="database">Database</label>
        <select name="database" id="database">
            <option value="mysql">MySQL</option>
            <option value="mariadb">MariaDB</option>
            <option value="couchdb">CouchDB</option>
            <option value="mongodb">MongoDB</option>
        </select>
    </div>
    <div class="input-group">
        <label for="language">Language</label>
        <select name="language" id="language">
            <option value="php">PHP</option>
            <option value="javascript">JavaScript</option>
            <option value="rust">Rust</option>
            <option value="python">Python</option>
        </select>
    </div>
    <input type="submit" value="Envoyer">
</form>
</div>