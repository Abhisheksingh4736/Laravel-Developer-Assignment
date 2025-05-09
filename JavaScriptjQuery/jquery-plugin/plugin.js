(function ($) {
    $.fn.dynamicFields = function (options) {
        let settings = $.extend({
            addButton: null,
            maxRows: 10
        }, options);

        const container = this;
        let rowCount = 0;

        function createRow() {
            rowCount++;
            const row = $(`
                <div class="row">
                    <input type="text" name="name[]" placeholder="Name" required />
                    <input type="email" name="email[]" placeholder="Email" required />
                    <button type="button" class="removeBtn">Remove</button>
                </div>
            `);
            container.append(row);
        }

        // Initial row
        createRow();

        // Add new row
        $(settings.addButton).click(function () {
            if (rowCount < settings.maxRows) {
                createRow();
            } else {
                alert('Maximum rows reached');
            }
        });

        // Remove row
        container.on('click', '.removeBtn', function () {
            $(this).closest('.row').remove();
            rowCount--;
        });

        return this;
    };
}(jQuery));
