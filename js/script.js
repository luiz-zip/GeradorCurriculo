$(document).ready(function(){
    $("#addExperience").click(function(){
        $("#experiences").append(`
            <div class="experience">
                <div class="form-group">
                    <label for="empresa">Empresa</label>
                    <input type="text" class="form-control" name="empresa[]" required>
                </div>
                <div class="form-group">
                    <label for="cargo">Cargo</label>
                    <input type="text" class="form-control" name="cargo[]" required>
                </div>
                <div class="form-group">
                    <label for="dataInicio">Data de Início</label>
                    <input type="date" class="form-control" name="dataInicio[]" required>
                </div>
                <div class="form-group">
                    <label for="dataTermino">Data de Término</label>
                    <input type="date" class="form-control" name="dataTermino[]" required>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição das Atividades</label>
                    <textarea class="form-control" name="descricao[]" rows="3" required></textarea>
                </div>
            </div>
        `);
    });
});
