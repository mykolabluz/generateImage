<!DOCTYPE html>
<html>
    <head>
        <title>Генерация изображения</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="generateImage.php" class='formWithValidation'>
            <div>
                <div>
                    <label for="width">Ширина:</label>
                </div>
                <div>
                    <input type='text' class='width field integer' name="width" id="width" />
                </div>
            </div>
            <div>
                <div>
                    <label for="height">Высота:</label>
                </div>
                <div>
                    <input type='text' class='height field integer' name="height" id="height" />
                </div>
            </div>
            <div>
                <div>
                    <label for="radius">Радиус:</label>
                </div>
                <div>
                    <input name="radius" type='password' class='radius field integer' id="radius"  />
                </div>
            </div>
            <div>
                <div>
                    <label for="quantity">Выберете количество окружностей</label>
                </div>
                <div>
                    <select name="quantity" class='quantity field' id="quantity">
                        <option></option>
                        <option value='5'>5</option>
                        <option value='10'>10</option>
                        <option value='20'>20</option>
                        <option value='50'>50</option>
                    </select>        
                </div>
            </div>
            <br>
            <input type='submit' name="submit" class='validateBtn' value='Сгенерировать изображение'/>
        </form>
        <script src='code.js'></script>
    </body>
</html>


