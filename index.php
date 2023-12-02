<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        margin: 0px;
    }

    header {
        text-align: center;
        width: 100%;
        background-color: blue;
        max-height: 500px;
    }

    header img {}

    section {
        background-color: brown;
        height: 100px;
    }

    nav li {
        text-align: right;
        position: relative;
        right: 0px;
        display: inline-block;
        margin: 0px 10px;

    }

    a {
        text-decoration: none;
        color: black;
    }

    .kiri,
    .kanan {
        float: left;
        width: 50%;
    }

    .kiri {
        background: cyan;
        height: auto;
    }

    .kanan {
        background-color: green;
    }

    .kiri img,
    .kanan img {
        border-radius: 15px;

    }

    .kiri img {
        width: 75%;
    }

    .kiri .img {
        text-align: center;
        margin: 10px;
    }

    .kanan img {
        width: 50%;
        float: left;
        height: auto;
        margin: 5px;
    }

    .berita {
        margin: 2em;
        background-color: red;
    }

    .bawah {
        text-align: center;
        width: 100vw;
        float: left;
        background-color: red;
        height: auto;
    }

    .text1 {
        color: #000000;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        top: 0px;
        width: 100%;
        text-align: center;
        margin: 0px;
        font-family: Maharlika;

    }

    .bawah div {
        float:left;    
        margin-left: 5px;
    }
</style>

<body>
    <header>
        <img src="https://encrypted-tbn2.gstatic.com/licensed-image?q=tbn:ANd9GcQ7srSZzWBFAocDC94Qv71wL6AkZUaaBatl98OtmX5I8ZOV0stkbp-S48ERiYV5BeBrZVsXGV0OXhtQdxEINnYso4utpJ9UX7yEYNEW3A"
            alt="Tanah Lot">
        <div class='text1'>
            <h1>Wonderfull Indonesia</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Fun Fact</a></li>
            <li><a href="">Info</a></li>
        </ul>
    </nav>
    <main>
        <section class="atas">
            <div class='kiri'>
                <div class='berita'>
                    <div class='img'>
                        <img src="https://encrypted-tbn2.gstatic.com/licensed-image?q=tbn:ANd9GcQ7srSZzWBFAocDC94Qv71wL6AkZUaaBatl98OtmX5I8ZOV0stkbp-S48ERiYV5BeBrZVsXGV0OXhtQdxEINnYso4utpJ9UX7yEYNEW3A"
                            alt="">
                    </div>
                    <div class='text'>
                        <div class='cat'>
                            <h5>Kebudayaan Indonesia</h5>
                        </div>
                        <div class='judul'>
                            <h1>Untuk Bisa Menikah Pemuda Pulau Nias Harus Bisa Melompati Batu?</h1>
                        </div>
                        <div class="deskripsi">
                            <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur fuga quasi
                                ad accusamus doloremque obcaecati magni id aliquid explicabo consequatur nostrum saepe,
                                repudiandae, nesciunt tempore rerum facere nobis laborum! Perspiciatis!</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class='kanan'>
                <div class="berita">
                    <div class='img'>
                        <img src="https://encrypted-tbn2.gstatic.com/licensed-image?q=tbn:ANd9GcQ7srSZzWBFAocDC94Qv71wL6AkZUaaBatl98OtmX5I8ZOV0stkbp-S48ERiYV5BeBrZVsXGV0OXhtQdxEINnYso4utpJ9UX7yEYNEW3A"
                            alt="">
                    </div>
                    <div class='text'>
                        <div class='cat'>
                            <h5>Kebudayaan Indonesia</h5>
                        </div>
                        <div class='judul'>
                            <h3>Untuk Bisa Menikah Pemuda Pulau Nias Harus Bisa Melompati Batu?</h3>
                        </div>
                        <div class="deskripsi">
                            <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur fuga quasi
                                ad accusamus doloremque obcaecati magni id aliquid explicabo consequatur nostrum saepe,
                                repudiandae, nesciunt tempore rerum facere nobis laborum! Perspiciatis!</h6>
                        </div>
                    </div>
                </div>
                <div class='berita'>
                    <div class='img'>
                        <img src="https://encrypted-tbn2.gstatic.com/licensed-image?q=tbn:ANd9GcQ7srSZzWBFAocDC94Qv71wL6AkZUaaBatl98OtmX5I8ZOV0stkbp-S48ERiYV5BeBrZVsXGV0OXhtQdxEINnYso4utpJ9UX7yEYNEW3A"
                            alt="">
                    </div>
                    <div class='text'>
                        <div class='cat'>
                            <h5>Kebudayaan Indonesia</h5>
                        </div>
                        <div class='judul'>
                            <h3>Untuk Bisa Menikah Pemuda Pulau Nias Harus Bisa Melompati Batu?</h3>
                        </div>
                        <div class="deskripsi">
                            <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur fuga quasi
                                ad accusamus doloremque obcaecati magni id aliquid explicabo consequatur nostrum saepe,
                                repudiandae, nesciunt tempore rerum facere nobis laborum! Perspiciatis!</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='bawah'>
            <h1>MENGENAL BUDAYA YANG TERSEBAR DI INDONESIA</h1>
            <div>
                <div>
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgWFhUZGRgaHBgZHBgaGhgcGB4cHhkdHBgcGBocIS4lHB4rJBkYJjgmLC8xNTU1HCQ7QDszPy40NTEBDAwMEA8QHxISHzQsJScxNjQ0NjYxNDQ0NDQ0NDQ0NDQ0NjQ3NDQ0NjQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NEA0NP/AABEIALcBEwMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABQYDBAcBAgj/xAA/EAABAwICBwYDBgUEAgMAAAABAAIRAyEEMQUSQVFxgZEGIjJhobETwfAHQlKCktFicqKy4SNTwvEU0iQ1Q//EABoBAQADAQEBAAAAAAAAAAAAAAACAwQFAQb/xAAqEQACAgEEAQMDBAMAAAAAAAAAAQIDEQQSITFBBSIyE1GBYXGx0RRCof/aAAwDAQACEQMRAD8A7MiIgPh+RX5hxwguBzBM8ZX6gX5p7SUCzE12fhq1B/WVFrJbXb9NNkXgWPe8Mpkh7u6C0kOuCCJF4IJB35bVJ6d7PPwzGOeWkPLoInWsSN0QRfcYsTCiMNin0nh7HFpuJGcSJ8iLZbVIaY0ga+q82IEQD3QLeFv3Z2xY5wLzNJJGaycpvLZEtC+2r5YsrQomaR9MWenTJyPKVjat7AMc6zGl5Nz3SWwPMXOzKEK8NmqWkL1hgqQdonEuuMNUGfhY/V8yNa0c1jfovENMHD1AYJ8DjYZ5BRc4rtj6cvCNqhWLdV7cwQ4HzBkey/Qmj8SKlJlQZPY13UA/NfnEOLG6rw5pzhzS0x5Aruf2f4jXwFE7WhzP0uIHpC9TT6L6MptMsqIi9NIREQBERAeLjn2paWL8SKQPdotj87oLj01RyK7GV+ddLl9etWqfie8ybDxGF5KSissbXLhIr2IfJWNql26DLs3tHBp9y5bruyVQMa8VGQcrHPaJbInbGd/IxV/kV/cjLS2/Yri+2hSz+ztcZBrvJrhP9ULUrYKozx03tG8tIH6svVSjdXLpoz2U2R7TMDWrcw+Fc8EtGX1ZYqDNYgTExFwOituAwJDQAJts9TCtSyZnyyrPpFpggg7ivoBXd+AY5h12hwi28cDsVTx2F+G4AGRvXkohTlXJSi8NGxo6xg2PuNi7J2GP/wAUeTnfJcfwgmOA9BHyXYOw7Yww83O+SrjDa+DsrXy1NO2faZZEXqKwqPEXqIAiIvQeFcF+0zBGnj6p2VAyoObQ139TXLvS5l9sWjZZRxAHhLqbj5O7zJ5hw/MhGSyjjVRua9ovMasSTkNv+VlrMva53KW0JgCwkkxMSIa4QDIs4b9tstqhZbGCyxCqU3hENh8M95hjZ6QOJNlOYHs29/jdqi+UE+XBWKjh4vF/xXM9VIUQuRf6hJcR4NtehiuZcmpgezuHZEsDjt1+9PIyFcMAxrQA1oAGQAAChqTVM4FwgLDXqZyn7pMvlVCK9qJKoyc7znN/dRuJZeSpiue63go3E5L3XdEa0RlfCMeCHNBBsRAg8RkVZOw+EFLDuY3wio8gbgQ0x1lQLlaezDYo8XO9gPkp+jzm7Ws8YIaqEUsk2iIvozEEREAREQGHEOhrjua4+i4NHcaPILvVZstcN4I6hcGe2A0cli1r9qNek+TMuCw5e9rGiS4gAb52fUKxaVo6hazW1oaDckxP3YLiABAPNQODqarmkbD9XUnWxDnuBc4kxEm5gZXXLnNKtryza4tyT8GSi1blNi1qQW5TXMlJokzENBUXnW+G1rvxNGq7nFjzBW9gtDak6rx5azQRwc2Y5gjgtrAiyk2Gy6ej1VkI5zlfqYbtPXJ9clQ0hUIJBsZgjrvvzVU0sdm9dOx+AZUHfF4s4WcOB+WS57pnRL6dQF12GQ1427YcPuu9CutTroWva+H9v6ORqdJOC3LlGvgKeQ4LtXZ3D6mHYIgxJ53XKtB4M1KrGgeIgfuuzUmAAAZAAdFsGljw2ZERF4awiIgCIi9AUX2g0W3E4epQdbXaQDucLtdyIClEQH5xo6Mcxzg9sPa5zC3cWkgjqFusYr79oOg4P/ksFjAqAbDk1/sDy81RSFydUpbnk6Gn2qPBIYd4dHSZ9VuMEGComg/VIUu0SJ+o8/ZcyyJqNqkVJYB2xQ5rsYJe9rBvcQ0eqx0+02GY5oFTXJIHcBOdszAOe9Qp0185rZFv8FU5xS5Zd3OlgWjiCtEabJbDaZJgkSW7M5OQHNVzSPa97H6ppsd/K9034hdW70nV3R9sef3MyuhF9llernoWlq0WDynqSfmua9ntPsxVVlHUcxzza4c3eb5iwK6vTbAA3WXvp2ht00mrVhkL7YzSSMiIi6pmCIiAIiIDxcN0nS1Kj2/he9vRxAXcVxD7Q8X8DF1mBoJJa+TlDmg5bb6yz6imVqUYov084wk2zBTFwt+ncqkU+0NUEWZ+k/8AspTDdp3apc6kDESWu1c52EG9jaVin6VqWuEn+TWtVW/Jc6K3GBVzRvaPDvsXFjt1SAOTpj1lWTBva8Asc14ylrgR1BXF1GluqeJxa/BbGyMumSej258luvctXDMLRdfdR+wIp7K8Mi1ln1WfsCxVsM17C1wBaRBB2/Vr+S9YFsUmFxDQJJsq6VOyxNd+DyaSjz0a/Y3Qvw3ue64bLWnfN5PnBv5q5hYMLQDGho2Z+Z2lbAX2Nedq3dnK2qPC6PURFM9CIiAIiIAiIgMNek17S1wBaQQQciDYgrkXajQbsLUi5puksd5bWO/iHqL747EtLSmjmYim6nUEtd1B2EHYQqbqlNYLK5uDycPqVWsGs4wBtP1c+Sj2do3udqMDg2D3rF5EXIGyBffE3BhZ+2mg62Gr6lSSw3Y++o4bY3O3j5KruBBBFiDPNT0mgrXuny/+Ist1MpcLoz6SaRUdrGXTN365ANx3uBXzScJEkxImM4m8LICXsLpJNPIQAA0klwJzLpII2RIWs0r6CnG3CMk+8nRsJitekHash4AbvDc9Y+Ztmqppsf6hsL6t95JdcnbkOisvZga9ENzinrDbln75+SrunGxUH1kf8r2r5sh4Lh9keC1sTUqH/wDNkDi8wPRruq7AqD9kuE1cM9+1745NaPmXK/Lk6qW66TLIrg9REWckEREAREQBcf8AtmwEVqNUCz2OYTsljgW+jz0XX1SvtV0f8TAueB3qT21BwnVd6PJ5KUHiQPz9EFbDHHUO4uHoCc/zLGWS+PNfQJjV3OcesA+wXVq5IM+mrd0fiXsdNOoaZObg4tHkXRaOK1GBSOj2QS45NG4HpuNsxcLXKEZRxJZRBNrlF20f2xezUZiWaxMy9gggCwOqJD8rlpHBW3DVGvGu0gg5EEEHgQuTUaBJ1jxDdytHZau9lQNYC5ryA5gH9Q8x7L5r1b0OucfqU8NePDNlOpaeJF4AVg0ZgtQazvEfQL40do7U7zvFsGwf5UmudodF9Jbpd/wSuu3cLo+kRF1DOEREAREQBERAEREAREQEbpnRNLFUnUqrdZrtv3mnY5p2ELhHbDspVwL4d36bidSoBAO3VcNjwNm3MeX6IWjpfRlPE0nUardZjxB3g7HNOxwMEHyU4TcWD8w4ZxDi2QA4EQ4S0kiLyRFiTPkscEEg2ix+alu1Og34Su+i+8Xa7Y5pnVeOMEEbCCFF1H60Okkkd621dOmeSEi59k9IajLQYaWEHceY3qM7TP8A9cgZANP6hK1uz+M1HEfi258oWXtA/WqzH3WC8XiYNjYQQOS1Qj78kGds+z2lq4Cj5hzurirMq72CeDo/DEf7YnjJn1lWJcK35y/ctXR6iIoHoREQBERAeKB7cf8A1+Ln/Zqf2lT6rH2hVHDAVw0azntFMAZ99wafQlF2DgWi8eaFX4oaHeNsENcCHMLTZ1tvHPJalNq3X6GxET8F52nV1XG/k0krXwlPWeGbZgjIjfO5djTOD5TIyTXZYdCaHa6Xvu0CQJgZSJWTF0Gh4awao8ZEQIFhPH5Kz1qbKGHYCAHu7xdeNXZ7cpUToPR9TFVgAO8+5nJrRtPAephXqzhzfSK8H1oTQtTEPDWN4u+60b3H5bV1jQWgKeGb3RLz4nnM8NwW1orRrMOwMpiAMztcdpd5rfXIv1ErH+hZFYAC9RFnJBERAEREAREQBERAEREAREQBERAUf7T+z3/kYY1WNmrRBcN7mW+I3oNYebfNcMw2CfUfqsbJ35NHmTsX6pLZEFcc0lodmFrvpMAawPkW+4/wnziY5KX15VR4JxipPDIfRXZAHUc+qQZBhjbRmLv/AGVkrdjqD4LjUJiJD2iwznucF94N8aoJ2mM9xO76hTjKwBjy/wCgs0tffnmRY6orwS3YnCijhxRa4uDHOgmJhx1oMbiSOSsarvZ98Pc2bOEjkZPuVYlOE3Nbn2VSWGeoiKwiEREAREQHiqHbzE92lSB8Ti88GiBPN3oreua9o8T8bEPIuGwxvAeI9dZV2vESdazIxYGnDZ2mw4nwqap6HpVNVr2NcGgQSO8IEWdm0+YK1cFTu3cLnibDpBKnsM2AT5x8lRCTi8otlhlQ7WdnXuaPgd5li5gHfDAZOrHimLjPPNWXsDooUsOKhHeq96doZ90fPmt8Nl3QKZY2AANghblqpzr2P7mdxSZkREUAEREAREQBERAEREAREQBERAEREAREQHioX2g4aH03/ia5h4tIc30c7or6q523w+thtb8D2u5Hun+5QmsxZKDxJFPYzuUX561swYLQBeDbMGNkrfps13SdggX8w7lk31UVgXn4eob6rw8WJAa9hDsshLG+pUpo1w75/idPv8wsE0mzT4JTR79Sowk2B/pNjPCVcQqSXB/d+8P8e8jqrXoyvr02u2xB4ixWjTy7RRNeTcREWorCIiAIi8QER2j0mKFIkeN0taPOLnl+yoWj6RcZnjxN/b3Wz2n0h8bEEAy1ktHBviPN3svrA0yG/wATjbjn6Aeiy2vLL4RwiVwIOrrRc5DlDRwmTzU1RbqtA3Cef0PVR2EZdo3XP1wlb7z3eJjlP7XUY8LIkZ8DTlwP5v291KrTwLLE77dFuLTBYRTLs9REUzwIiIAiIgCIiAIiIAiIgCIiAIiIAiIgC0tLYf4lGoz8TXAcYt6wt1eFeMHIsBUd32BpLXtYXgASAx8tN8gNe+ZuIiJUjh6kMcWxJcY47uq1yDh8Y4B2qGvc0m/gLwYMXgjVy2gLLRaJIF2io47snE5XjLKdqwWLg1pkmyiIsTP4iZPOc1PaAxF3NIie9HnYOjeMjKgTW1ALT9WE5Xy4wtzCYoBzagIhph19lwedz1XlUlGRXNZRcUXyDK+l0SgIiIDxRXaPH/BoOcDDndxv8zrTyEnkpVUHttji+qKbTZg/rd+zfcqE3hEorLIPB05d5ZDgMz9b1P4ZgJn8Nr5CYLjwy9VGYBgHe2AW84N/UeimMGy17lx5efAfusjZe2SGFYYcfxEQdzYEnp6rbZc8LfXsvimY4AdSVnwrLtHn/lTS8EGyTothoH15rKvF6tZSEREAREQBERAEREAREQBERAEREAREQBERAF4vUQHNu2uH1cQ4geNjXcwC0/2heYuC9r22DhrkQBJLS0kjMGc9sk8pft1Sh1F/87T5izvk5QNNs06LxEAvY6BfWhrpMfzxJv1WS2PZpi8xTN2izWeSbgRAI27T7cFvNYJkCTkQMyNvGxt02qHoPIZNi5xMHIEkw3b5t6KRoUiLyNa+zuiSJG+8C/ksiZ60WvQuI16TbyW92d4junmIUiq5oKvDy3IOm25wuR7lWMLpVS3RTM8lhnqIisImvi8QKbHPdk0Fx5BctqVHPeXHxElx/mcYj1Vy7a4zVptpg3eZP8rb+pjoqfgmEvFt7vZrfdx5LPc8vBdWsLJJUGWa0ZnqABn8+SmMO25JFmiBv4cSYHJaGFbm7dIHAEjhnrdVK4Sn4R+Y8t54x+lUpHsmbDWmANvidx3e/Rb+CZ3p3BarOkmY3DIegW/o/wAJO8q2C9xXJ8G4iItJAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiICs9uac0GnY17SeBDm/NVjR4HwXtI7zXseL7NVoIHEMeOivHaPD6+GqtAvqlw4t7w9lQdFVP9SD4Xy0gbZa9sCxnxbFnsXJdB8GTBd7UIgi7tmd4IgfxLfbUMgNvkdwAg5nbcR+beFG4AGWA56hG64Lf89FJaOaC3W33FtmwcIvG8lYmuS1m1QrGQ4SHNLZB2EZZW3i2wq40qgcARkQCOaqL2R3vKCBuzjrdTmga8sLCZLDH5Tdp9+i00Sw8FM15JZEUZp/G/BoPeDDoDW+RcdUHlM8lrbwsla5KP2jxfxcQ8i4EMb5xnHG/VfOCES7ebbzBMdbnmtCkJMicp5uv6COqmMM27QMhf2A/5eixN5eTTjCwSGHpRqt3RO6wjLcbqWpMsd7rcgP+/wBS0sLTkzvtw2D1k81JwJgbAB1APWNXqpxRU2Y6zrcbdVK4NsMaPKet1Egaz2t68zb5qcCsqWW2QkfSIivIhERAEREAREQBERAEREAREQBERAEREAREQBERAY6jQQQcjZcmrsNN5bJGo+DH8DxEbRls3LrhXNu1uH1MQ/8Aj1XjmCD1cw9VVauCyp84NVhu6SJh4lp7shxuCBlwUvgyNRp336+WzaoBhsIMWeJgm5AgqVwrw1jSLAQOAB+uiwy7L2SdKps3z1m4naVn0bX+HXaCe6+ae7ZrU5/SWhaGHw8sDmySbmDGtsBJG2IuvNIvIYKjbluq9sbS0h7fZw2eJewe2SZBrKwXxU7t3Xk0aX4i955ANHo9/RW2lUDmgjIgEcCLLnna6trYxwBnUY1kbnOkj+5bbXiJVWsyNDCMk+Uk/Jv15BTGGyc4RMHYbESADznqo7DgAEjlymOWsXdFLUWeESDtPK8xxuspdJktgKYBDdgE/IfM8gtpuXmZPX9rDksDO61xGfh9Y/fqszjAVvSKvJl0eyXl27/ofNSq09H04YN5v+y3FfWsIhJ8nqIimeBERAEREAREQBERAEREAREQBERAEREAREQBERAeKn9u8PalU3FzTzGsP7XdV6ihZ8SUPkil0HwYH8Pp3f2UlhzNKcszn5yPcIi58zUWLAkFoEbB7LDWZDXt3d4e8e4RF6+kVrssHZytrYamdzdT9BLf+K5/jagdicQ85fFdJ2gM7lh+Uoi0W/FHlfyZvMHhFrQDbcLiB5+2al8GyXE5wMvX5AIih/sesk/wjyn5yevVZGt1iG7z6bV6is8lTJcBfSItCIBERegIiIAiIgCIiAIiIAiIgP/Z"
                        alt="">Alat Musik
                </div>
                <div>
                    <img src="data:image/jpeg;base64,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"
                        alt="">Makanan Khas
                </div>
                <div>
                    <img src="data:image/jpeg;base64,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"
                        alt="">Tarian Daerah
                </div>
                <div>
                    <img src="data:image/jpeg;base64,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"
                        alt="">Baju Adat
                </div>
            </div>
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>