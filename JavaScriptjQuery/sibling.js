
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <h2>Fruit List</h2>
    <ul>
        <li class="item">Apple</li>
        <li class="item">Banana</li>
        <li class="item selected">Cherry</li>
        <li class="item">Date</li>
        <li class="item">Elderberry</li>
    </ul>

    <button id="getSiblings">Get Sibling Text</button>

    <div id="result"></div>

    <script>
        $(document).ready(function() {
            $('#getSiblings').click(function() {
                var siblings = $('.selected').siblings().map(function() {
                    return $(this).text();
                }).get();

                $('#result').html('Siblings: ' + siblings.join(', '));
            })
        });
    </script>

</body>
</html>
