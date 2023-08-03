<style>
    #notfound {
        position: relative;
        min-height: 400px;
    }

    #notfound .notfound {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .notfound {
        max-width: 520px;
        width: 100%;
        line-height: 1.4;
        text-align: center
    }

    .notfound .notfound-404 {
        position: relative;
        height: 200px;
        margin: 0 auto 20px;
        z-index: -1
    }

    .notfound .notfound-404 h1 {
        font-family: montserrat, sans-serif;
        font-size: 236px;
        font-weight: 200;
        margin: 0;
        color: gray;
        text-transform: uppercase;
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .notfound .notfound-404 h2 {
        font-family: montserrat, sans-serif;
        font-size: 28px;
        font-weight: 400;
        text-transform: uppercase;
        color: white;
        background: rgba(0, 0, 0, .5);
        padding: 10px 5px;
        margin: auto;
        display: inline-block;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0
    }

    .notfound a {
        font-family: montserrat, sans-serif;
        display: inline-block;
        font-weight: 700;
        text-decoration: none;
        color: #fff;
        text-transform: uppercase;
        padding: 13px 23px;
        background: #ff6300;
        font-size: 18px;
        -webkit-transition: .2s all;
        transition: .2s all
    }

    .notfound a:hover {
        color: #ff6300;
        background: #211b19
    }

    @media only screen and (max-width: 767px) {
        .notfound .notfound-404 h1 {
            font-size: 148px
        }
    }

    @media only screen and (max-width: 480px) {
        .notfound .notfound-404 {
            height: 148px;
            margin: 0 auto 10px
        }

        .notfound .notfound-404 h1 {
            font-size: 86px
        }

        .notfound .notfound-404 h2 {
            font-size: 16px
        }

        .notfound a {
            padding: 7px 15px;
            font-size: 14px
        }
    }
</style>
<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h1><?= $code ?></h1>
            <h2><?= $mensaje ?></h2>
        </div>
        <a href="?">inicio</a>
    </div>
    <button id="test">traer</button>
    <div>
        <table>
            <thead>
                <tr>
                    <td>${element.ape_cli}</td>
                    <td>${element.cel_cli}</td>
                    <td>${element.ciu_cli}</td>
                    <td>${element.cor_cli}</td>
                    <td>${element.dir_cli}</td>
                    <td>${element.fch_cli}</td>
                    <td>${element.id_cli}</td>
                    <td>${element.nom_cli}</td>
                    <td>${element.pri_cli}</td>
                    <td>${element.user_cli}</td>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>