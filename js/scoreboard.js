var points = { gespeeld:"", cleansheet:"", gescoord:"", assist:"", winst:"", gelijkspel:"", geel:"", rood:"", tegengoal:"", eigengoal:"", jasje:"" };

function updatePoints ()
{
    var value = $(this).val();
    switch (value)
    {
        case '0':
            points = { gespeeld:3, cleansheet:4, gescoord:10, assist:5, winst:3, gelijkspel:1, geel:1, rood:3, tegengoal:2, eigengoal:2, jasje:2 };
            break;
        case '1':
            points = { gespeeld:1, cleansheet:3, gescoord:5, assist:2, winst:3, gelijkspel:1, geel:1, rood:3, tegengoal:1, eigengoal:3, jasje:2 }
            break;
        case '2':
            points = { gespeeld:1, cleansheet:0, gescoord:4, assist:2, winst:3, gelijkspel:1, geel:1, rood:3, tegengoal:0, eigengoal:3, jasje:2 }
            break;
        case '3':
            points = { gespeeld:0, cleansheet:0, gescoord:3, assist:2, winst:3, gelijkspel:1, geel:1, rood:3, tegengoal:0, eigengoal:3, jasje:2 }
            break;
    }
}

$('.add-points').on('click', function (e)
{
    e.preventDefault();

    var input = $(this).parents('tr').find('input');
    var value = parseFloat(input.val());
    var newValue = value + points[input.attr('name')];

    input.val(newValue);

    var score = $(this).parents('tr').find('#score');
    var scoreValue = parseFloat(score.text());
    var newScore = scoreValue + points[input.attr('name')];

    score.text(newScore);

    if (newScore > 0) {
        score.addClass('positive');
        score.removeClass('negative');
    } else if (newScore == 0) {
        score.removeClass('positive');
        score.removeClass('negative');
    }
});

$('.remove-points').on('click', function (e)
{
    e.preventDefault();

    var input = $(this).parents('tr').find('input');
    var value = parseFloat(input.val());
    var newValue = value - points[input.attr('name')];

    input.val(newValue);

    var score = $(this).parents('tr').find('#score');
    var scoreValue = parseFloat(score.text());
    var newScore = scoreValue - points[input.attr('name')];

    score.text(newScore);

    if (newScore < 0) {
        score.addClass('negative');
        score.removeClass('positive');
    } else if (newScore == 0) {
        score.removeClass('positive');
        score.removeClass('negative');
    }
});

$('.select-type').on('change', updatePoints);
$('.select-type').trigger('change');

function goBack() {
     window.history.back();
 }

