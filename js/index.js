$(document).ready(()=>{
    
    // FUNCTION DECLARATIONS
    
    const loadData = ()=>{
        $.ajax({
            url: "scripts/loadData.php",
            method: "POST",
            success: (data)=>{
                $('.result').html(data)
            }
        })
    }
    loadData()

    $(document).on('click', "button[data-button='delete']", function(){
        
        let id = $(this).attr("id")
        $.ajax({
            url: "scripts/delete.php",
            method: "POST",
            data: {id: id},
            success: (data)=>{
                loadData()
            }
        })
    })
    
    // end
})
