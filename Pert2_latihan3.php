<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator || M Yusuf Q</title>
    <style type="text/css">
        h2 {
            color: red;
        }
    </style>
</head>
<body>
    <form>

        <center>
            <table>
                <tr><td colspan="4"><h1>Kalkulator</h1></td></tr>
                <tr>
                    <td colspan="2"><h2>Nilai 1</h2></td>    
                    <td colspan="2"><h2>Nilai 2</h2></td>
                </tr>
                <tr>
                    <td><input type="number" name="a" placeholder="Bilangan a" value="<?php echo @$_GET['a'] ?>"></td>
                    <td>
                        <select name="operator">
                            <!--<option selected disabled>Pilih Operator</option> -->
                            <option <?php echo @$_GET['operator'] === '+' ? 'selected' : '' ?> value="+">+</option>
                            <option <?php echo @$_GET['operator'] === '-' ? 'selected' : '' ?> value="-">-</option>
                            <option <?php echo @$_GET['operator'] === '*' ? 'selected' : '' ?> value="*">*</option>
                            <option <?php echo @$_GET['operator'] === '/' ? 'selected' : '' ?> value="/">/</option>
                        </select>                               
                    </td>
                    <td><input type="number" name="b" placeholder="Bilangan b" value="<?php echo @$_GET['b'] ?>"></td>
                    <td><button type="submit">Submit</button></td>
                </tr>
                <tr><td><button type="button" onclick="location.href = '?clear'">Clear</button></td></tr>
                <tr>
                    <td colspan="4">
                        <?php
                        if ($_GET):
                            $a = (double) @$_GET['a'];
                            $b = (double) @$_GET['b'];
                            $operator = @$_GET['operator'];
                            
                            switch ($operator) {
                                case '+':
                                    $hasil = $a + $b;
                                    break;
                                case '-':
                                    $hasil = $a - $b;
                                    break;
                                case '*':
                                    $hasil = $a * $b;
                                    break;
                                case '/':
                                    $hasil = $a / $b;
                                    break;
                            }
                            ?>
                            <div style="margin-top: 1rem">
                            Hasil: <strong><?php echo $hasil ?></strong>
                            </div>
                            <?php
                        endif; ?>
                    </td>
                </tr>
            
            </table>
        </center>
    </form>
</body>
</html>