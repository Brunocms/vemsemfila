$().ready(function() {
   geraFila();



            $('a[name=modal]').click(function(e) {
                e.preventDefault();

                var id = $(this).attr('href');

                var maskHeight = $(document).height();
                var maskWidth = $(window).width();

                $('#mask').css({'width':maskWidth,'height':maskHeight});

                $('#mask').fadeIn(250);
               // $('#mask').fadeTo("fast",0.8);

                //Get the window height and width
                var winH = $(window).height();
                var winW = $(window).width();

                $(id).css('top',  winH/2-$(id).height()/2);
                $(id).css('left', winW/2-$(id).width()/2);

                $(id).fadeIn(500);

            });

            $('.window .close').click(function (e) {
                e.preventDefault();

                $('#mask').hide();
                $('.window').hide();
            });

            $('#mask').click(function () {
                $(this).hide();
                $('.window').hide();
            });
});

function mudarFila(fila)
{
    $(".tab-mesas.selected").removeClass('selected');
    $("#botao_" + fila).addClass('selected');
    geraFila();
}

function geraFila()
{
    $("#tabela_fila").html('');
    id_fila = $(".tab-mesas.selected").attr('id_fila');

    $.ajax({
        url: "http://vemsemfila.v1:81/api/fila/list/id/" + id_fila,
        type: 'GET',
        dataType: 'json'
    }).done(function(data) {
            if (data.status == false) {
                $("#tabela_fila").html('');
                return;
            }

            data.forEach( function( elemento, index){
                $("#tabela_fila").append(template(elemento, index));
            });

        });
}

function formatTime(timestamp)
{
    var date = new Date(timestamp*1000);
// hours part from the timestamp
    var hours = date.getHours();
// minutes part from the timestamp
    var minutes = date.getMinutes();
// seconds part from the timestamp
    var seconds = date.getSeconds();

// will display time in 10:30:23 format
    return formattedTime = hours + ':' + minutes;
}

function template(data, index)
{
    html = '<tr>';
    html += '<td>' + (index + 1) + '</td>';
    html += '<td>' + data.name + '</td>';
    html += '<td>' + data.qtd_pessoas + '</td>';
    html += '<td>-</td>';
    html += '<td>-</td>';
    html += '<td>' + formatTime(data.entrada) + '</td>';
    html += '<td><a href="#" class="bt small green">CHAMAR</a></td>';
    html += '</tr>';

    return html;
}

