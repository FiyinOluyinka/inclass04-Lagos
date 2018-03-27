<!-- example 1 - using absolute position for center -->
<nav class="navbar navbar-expand-md navbar-dark bg-primary">

    <div class="navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link <?php if($page=='home'){echo 'highlight';}?>" href="index.php">Home</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link <?php if($page=='yidi'){echo 'highlight';}?>" href="yidi.php">Yidi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='yuanzhuo'){echo 'highlight';}?>" href="yuanzhuo.php">Yuanzhuo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='zhenghao'){echo 'highlight';}?>" href="zhenghao.php">Zhenghao</a>

            <li class="nav-item">
                <a class="nav-link <?php if($page=='olatunde'){echo 'highlight';}?>" href="olatunde.php">Olatunde</a>
            </li>
        </ul>
    </div>
</nav>
