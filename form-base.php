<tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="name" value="<?=$product['name']?>"></td>
        </tr>
        <tr>
            <td>Sub</td>
            <td><input class="form-control" type="text" name="subname" value="<?=$product['subname']?>" ></td>
        </tr>
        <tr>
            <td>Preço</td>
            <td><input class="form-control" type="number" name="price" value="<?=$product['price']?>" ></td>
        </tr>
        <tr>
            <td>Link imagem</td>
            <td><input class="form-control" type="text" name="imageLink" value="<?=$product['imageLink']?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="" type="file" name="imageFile">
            <p class="help-block">Inpute uma imagem de seu computador caso prefira.</p>
        </td>
        </tr>
        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="description"><?=$product['description']?></textarea></td>
</tr>