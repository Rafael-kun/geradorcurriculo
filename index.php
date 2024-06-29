<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <div class="container">
        <h1>Gerador de Currículo</h1>
        <form id="cv-form" action="process.php" method="post">
            <label for="name">Nome Completo:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Telefone:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="address">Endereço:</label>
            <input type="text" id="address" name="address" required>

            <label for="summary">Resumo:</label>
            <textarea id="summary" name="summary" required></textarea>

            <div id="experience-section">
                <label for="experience">Experiência Profissional:</label>
                <textarea id="experience" name="experience[]" required></textarea>
            </div>
            <button type="button" id="add-experience">Adicionar Experiência</button>

            <div id="education-section">
                <label for="education">Formação Acadêmica:</label>
                <textarea id="education" name="education[]" required></textarea>
            </div>
            <button type="button" id="add-education">Adicionar Formação</button>

            <label for="skills">Habilidades:</label>
            <textarea id="skills" name="skills" required></textarea>

            <button type="submit">Gerar Currículo</button>
        </form>

        <div id="cv-output" class="cv-output"></div>
    </div>
</body>
</html>