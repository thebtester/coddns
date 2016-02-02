table {
    padding: 5px;
    margin: 0 auto;
    border-collapse: collapse;
}
thead{
    text-align: center;
    background: #1F282B;
    color: white;
}
thead td {
    padding: 5px;
}
tbody *{
    padding: 5px;
}
td {
    border: 1px solid #ddd;
}
tbody tr:hover{
    background: #E8F1F9;
}
button, input[type="submit"]{
    padding-left: 5px;
    padding-right: 5px;
}
td.del{
    cursor: pointer;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 1em;
    width: 1.4em;
    height: 1.4em;
}
td.edit{
    cursor: pointer;
    background: url('<?php echo $config["html_root"];?>/rs/img/edit.png') no-repeat center;
    background-size: 1em;
    width: 1.4em;
    height: 1.4em;
}
td.del{
    cursor: pointer;
    background: url('<?php echo $config["html_root"];?>/rs/img/delete.png') no-repeat center;
    background-size: 1em;
    width: 1.4em;
    height: 1.4em;
}

div#rec_info {
    height: 1em;
}
