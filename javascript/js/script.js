$(document).ready(function() {
    $('#add-experience').click(function() {
        $('#experience-section').append('<textarea name="experience[]" required></textarea>');
    });

    $('#add-education').click(function() {
        $('#education-section').append('<textarea name="education[]" required></textarea>');
    });
});
