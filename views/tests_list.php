<h1>Tests avaliable:</h1>
<ul>
    <li>
        <a href="<?php echo $this->router->pathFor('tests', ['id' => 1]); ?>">Php string functions (by function name)</a>
    </li>
    <li>
        <a href="<?php echo $this->router->pathFor('tests', ['id' => 2]); ?>">Php string functions (by description)</a>
    </li>
    <li>
        <a href="<?php echo $this->router->pathFor('tests', ['id' => 3]); ?>">Php array functions (by fuction name)</a>
    </li>
    <li>
        <a href="<?php echo $this->router->pathFor('tests', ['id' => 4]); ?>">Php array functions (by description)</a>
    </li>

</ul>