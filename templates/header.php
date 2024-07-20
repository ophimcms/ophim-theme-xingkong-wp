<style>
    #result{
        margin-top: 20px;
        background-color: #333333;
        list-style-type: none;
        width: 400px;
        position: absolute;
        top: 32px;
        z-index: 100;
        padding-left: 0;
    }
    #result a{
        color: #FFF;
    }
    .column {
        float: left;
        padding: 5px;
    }

    .left {
        text-align: center;
        width: 20%;
    }
    .right {
        width: 80%;
    }
    .rowsearch:after {
        content: "";
        display: table;
        clear: both;
    }
    .rowsearch:hover {
        background-color: #262323;
    }
</style>
<header class="stui-header__top clearfix">
    <div class="stui-header__bar clearfix">
        <div class="container">
            <div class="row">
                <div class="stui-header__logo">
                    <a href="/">
                        <?php op_the_logo('max-width:50px') ?>
                    </a>
                </div>
                <div class="stui-header__search">
                    <form action="/" method="GET" id="form-filter" autocomplete="off">
                        <input type="text" name="s" class="mac_wd form-control" value="<?php echo "$s"; ?>" id="query_search" onkeyup="fetch()"
                               placeholder="Tìm kiếm phim..." />
                        <button class="submit" type="submit">
                            <i class="icon iconfont icon-search"></i>
                        </button>
                    </form>
                    <div id="result"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="stui-header__menu clearfix">
        <div class="container">
            <div class="row">
                <ul class="">
                    <?php
                    $menu_items = wp_get_menu_array('primary-menu');
                    foreach ($menu_items as $key => $item) : ?>
                        <?php if (empty($item['children'])) { ?>
                            <li>
                                <a href="<?= $item['url'] ?>"><?= $item['title'] ?></a>
                            </li>
                        <?php } else { ?>
                            <li class="dropdown">
                                <a href="<?= $item['url'] ?>"><?= $item['title'] ?> <i
                                            class="icon iconfont icon-moreunfold"></i></a>
                                <ul class="submenu">
                                    <?php foreach ($item['children'] as $k => $child): ?>
                                        <li class="">
                                            <a href="<?= $child['url'] ?>"><?= $child['title'] ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>

                        <?php } ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</header>
