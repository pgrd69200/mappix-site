<h2>Contact</h2>

<from method="post">
    <label>Nom</label> 
    <input name"nom" required>
    <label>Massage</label>
    <textarea name="message" required></textarea>
    <button type="submit">Envoyer</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<p>Merci " . htmlspecialchars($_POST ["nom"]);
}
?> 
