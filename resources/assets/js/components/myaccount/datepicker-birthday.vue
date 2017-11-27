<template>
    <input placeholder="Selected date" type="text" id="datepicker-birthday" name="birthday">
</template>

<script>
    $(document).ready(function () {
        // create DateTimePicker from input HTML element
        $("#datepicker-birthday").kendoDateTimePicker({
            format: 'yyyy-MM-dd',
            dateInput: false
        });

        let kendoSpanClock = $('#datepicker-birthday').next().find('span.k-i-clock');
        if(kendoSpanClock.attr('aria-controls') === 'datepicker-birthday_timeview')
        {
            kendoSpanClock.parent().addClass('hidden');
        }

        $('#datepicker-birthday').attr('readonly','readonly');
    });
</script>
