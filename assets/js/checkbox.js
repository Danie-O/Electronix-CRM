/**
 * Highlights all table rows when the user
 * selects the "select all" checkbox.
 */
function highlightAllTableRows() {
    let row = document.getElementsByClassName("table-row");
    for (let i = 0; i < row.length; i++) {
        if (!row[i].classList.contains("highlighted") && i !== 0) {
            row[i].classList.add("highlighted");
        }
    }
}

function removeTableRowsHighlight() {
    let row = document.getElementsByClassName("table-row");
    for (let i = 0; i < row.length; i++) {
        if (row[i].classList.contains("highlighted") && i !== 0) {
            row[i].classList.remove("highlighted");
        }
    }
}

function highlightTableRow() {
    let table_row = document.getElementsByClassName("table-row");
    for (let i = 0; i < table_row.length; i++) {
        let row = table_row[i];
        if (i !== 0) {
            row.addEventListener("click", function () {
                if (row.children[0].childNodes[3].checked === true) {
                    row.classList.add("highlighted");
                }
            });
        }
    }
}

function removeTableRowHighlight() {
    let table_row = document.getElementsByClassName("table-row");
    for (let i = 0; i < table_row.length; i++) {
        let row = table_row[i];
        if (i !== 0) {
            row.addEventListener("click", function () {
                if (
                    !row.children[0].childNodes[3].checked === true &&
                    row.classList.contains("highlighted")
                ) {
                    row.classList.remove("highlighted");
                }
            });
        }
    }
}

if (document.getElementById("multiple_deletion")) {
    let checked = 0;

    let multiple_deletion = document.getElementById("multiple_deletion");
    multiple_deletion.style.display = "none";

    let select_all_checkboxes = document.getElementById(
        "select_all_checkboxes"
    );
    let delete_checkbox = document.getElementsByClassName("delete_checkbox");

    // if the user clicks on the 'select_all_checkboxes'
    select_all_checkboxes.addEventListener("click", function () {
        for (let i = 0; i < delete_checkbox.length; i++) {
            if (select_all_checkboxes.checked === true) {
                // Highlight all table rows
                highlightAllTableRows();

                // select all the delete_checkbox
                delete_checkbox[i].checked = true;

                // increment the checked value
                checked++;
            } else {
                // Remove highlight from all table rows
                removeTableRowsHighlight();
                delete_checkbox[i].checked = false;
                checked--;
            }
            if (checked > 0) {
                multiple_deletion.style.display = "block";
            } else {
                multiple_deletion.style.display = "none";
            } 
        } 
    });

    for (let i = 0; i < delete_checkbox.length; i++) {
        delete_checkbox[i].addEventListener("click", function () {
            if (delete_checkbox[i].checked === true) {
                highlightTableRow();
                checked += 1;
            } else if (delete_checkbox[i].checked === false) {
                select_all_checkboxes.checked = false;
                removeTableRowHighlight();
                checked -= 1;
            } 
            if (checked < 0) {
                // checked = 1;
            }

            if (checked > 0) {
                multiple_deletion.style.display = "block";
            } else {
                multiple_deletion.style.display = "none";
            } // end of if(checked())
        });
    }
}