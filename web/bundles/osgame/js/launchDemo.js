/**
 * Created by Thibaut on 02/07/2015.
 */
/* JS File for character selection */

function selectChar( link ) {
    var $link = $(link);
    $("#cId").val($link.attr("cId"));
    $("#cName").val($link.attr("cName"));
    $("#user").val($link.attr("cUser"));
    $("#formChar").submit();
}