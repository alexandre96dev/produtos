<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                Produtos
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#btnAddProductModal">Cadastrar</button>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Valor de Venda</th>
                            <th scope="col">Estoque</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody> <?php foreach ($products as $item) : ?> <tr>
                        <td>
                            <?= $item->id ?>
                        </td>

                        <td><?= $item->descricao ?></td>

                        <td>
                            <?= $item->valor_venda ?>
                        </td>

                        <td><?= $item->estoque ?></td>
                        <td><?= $item->ativo ?></td>
                        <td>
                            <a href="/products/delete?id=<?= $item->id ?>">Ativar</a>
                            <a href="/products/delete?id=<?= $item->id ?>">Excluir</a>
                        </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-body-secondary">
                2 days ago
            </div>
        </div>
    </div>
    <div class="modal fade" id="btnAddProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/products/save" enctype="multipart/form-data"  method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Descrição</label>
                            <input type="text" class="form-control" id="createDescription" name="createDescription" placeholder="Descrição teste">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Valor de Venda</label>
                            <input type="text" class="form-control" id="createSellingPrice" name="createSellingPrice" placeholder="0,00">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Estoque</label>
                            <input type="text" class="form-control" id="createStock" name="createStock" placeholder="0">
                        </div>
                        <button type="button" class="btn btn-secondary" id="add-images">Adicionar Imagens</button>
                        <div class="mb-3" id="imagens">
                            <input class="form-control" type="file" name="imagem[]">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function (){
            $('#add-images').click(function (){
                let newImage = $('#imagens input:first').clone();

                newImage.val('');

                $('#imagens').append(newImage);
            })
        })
    </script>
</body>

</html>