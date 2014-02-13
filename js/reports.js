$(document).ready(function(){
  numberofstu();
});
$("#numberofstudent").click(function (){

  numberofstu();
});

function numberofstu(){
      $("#action").find("li").each(function(){
        $('li').attr("class","");//dashboard.php ul
    });
    $('#action li').eq(0).attr("class","active");


     $("#dashboard-content").css("display","");
     $("#divstudentperformance").css("display","none");
     $("#divnumberofstudent").css("display","");

     
     $.ajax({
      url:"scripts/getchartnumberofstudent.php",
      type:"POST",
      data:({}),
      dataType:"json",
      success:function(data){
        var dataSource = [
        {branch:"CS",student:data[1]},
        {branch:"IT",student:data[0]},
        {branch:"ECE",student:data[2]},
        {branch:"MECH",student:data[3]},
        {branch:"Civil",student:data[4]},
        ];


        $("#number").dxPieChart({
          dataSource:dataSource,
          title: "Number Of Student",
          series:{
            
            argumentField:"branch",
            valueField:"student",
            type:"doughnut",
            innerRadius:0.3,
            label:{
            visible:true,
            connector:{visible:true}

            }
          }
        });
      }
    });

    $.ajax({
        url:"scripts/getchartmaleandfemale.php",
        type:"POST",
        data:({}),
        dataType:"json",
        success:function(data){
            var dataSource = [
              {branch:"IT", male:data[0] , female:data[1]},
              {branch:"CS",male:data[2] , female:data[3]},
              {branch:"ECE",male:data[4] , female:data[5]},
              {branch:"MECH",male:data[6] , female:data[7]},
              {branch:"Civil",male:data[8] , female:data[9]},

            ];
            

            $("#ratio").dxChart({
              dataSource:dataSource,
              title:'male and female Ratio',
              commonSeriesSettings:{
                type:'bar',
                label:{visible:true,
                  connector:{visible:true}},
                argumentField:'branch'
              },
              series:[
                {valueField : 'male',name:'male'},
                {valueField : 'female',name:'female'}
              ]
            });
        }
    });
}


$("#studentperformance").click(function (){

  $("#action").find("li").each(function(){
    $('li').attr("class","");//dashboard.php ul
  });
  $('#action li').eq(1).attr("class","active");

   $("#dashboard-content").css("display","");
    $("#divstudentperformance").css("display","");
     $("#divnumberofstudent").css("display","none");

    $.ajax({
        url:"scripts/getchartstudentperformance.php",
        type:"POST",
        data:({}),
        dataType:"json",
        success:function (data){
            var dataSource = [
              {branch:"IT" , percentage:data[0]},
              {branch:"CS" , percentage:data[1]},
              {branch:"ECE" , percentage:data[2]},
              {branch:"MECH" , percentage:data[3]},
              {branch:"Civil" , percentage:data[4]},

            ];

            $("#topper").dxChart({
              dataSource:dataSource,
              title:'Branch Topper',
              commonSeriesSettings:{
                label:{
                  visible:true
                }
              },
              series:{
                type:'bar',
                argumentField:'branch',
                valueField:'percentage',
                name:'Percentage'

              }
              
            });
        }
    });

    $.ajax({
      url:"scripts/getchartbetweenpercentage.php",
      type:"POST",
      data:({}),
      dataType:"json",
      success:function (data){
        var dataSource = [
          { branch: "IT", between90to100: data[9], between80to89:data[10], between70to79:data[11],between60to69:data[12],between50to59:data[13],between40to49:data[14],between30to39:data[15],between20to29:data[16],between10to19:data[17] },
          { branch: "CS",between90to100: data[18], between80to89:data[19], between70to79: data[20],between60to69:data[21],between50to59:data[22],between40to49:data[23],between30to39:data[24],between20to29:data[25],between10to19:data[26]},
          { branch: "ECE", between90to100: data[27], between80to89: data[28], between70to79: data[29],between60to69:data[30],between50to59:data[31],between40to49:data[32],between30to39:data[33],between20to29:data[34],between10to19:data[35] },
          { branch: "MECH", between90to100: data[36], between80to89: data[37], between70to79: data[38],between60to69:data[39],between50to59:data[40],between40to49:data[41],between30to39:data[42],between20to29:data[43],between10to19:data[44]},
          { branch: "Civil",between90to100: data[45], between80to89: data[46], between70to79: data[47],between60to69:data[48],between50to59:data[49],between40to49:data[50],between30to39:data[51],between20to29:data[52],between10to19:data[53]},
    
        ];

      $("#betweenRange").dxChart({
        dataSource: dataSource,
        commonSeriesSettings: {
        argumentField: "branch",
        type: "stackedBar",
        //label:{visible:true}
        },
        series: [
          { valueField: "between90to100", name: "90 - 100", stack: "male" },
          { valueField: "between80to89", name: "80 - 90", stack: "male" },
          { valueField: "between70to79", name: "70 - 79", stack: "male" },
          { valueField: "between60to69", name: "60 - 69", stack: "male" },
          { valueField: "between50to59", name: "50 - 59", stack: "male" },
          { valueField: "between40to49", name: "40 - 49", stack: "male" },
          { valueField: "between30to39", name: "30 - 39", stack: "male" },
          { valueField: "between20to29", name: "20 - 29", stack: "male" },
          { valueField: "between10to19", name: "10 - 19", stack: "male" },
          
        
        ],
        legend: {
        horizontalAlignment: "center",
        verticalAlignment:"buttom",
        
        border: { visible: true }
        },
        valueAxis: {
        title: {
            text: "number of Student"
        }
        },
        title: "Between Percentage",
        tooltip: {
        enabled: true
        }
      });
      }//success
    });//

    

    $.ajax({
      url:"scripts/getchartbetweenpercentage.php",
      type:"POST",
      data:({}),
      dataType:"json",
      success:function(data){
        var dataSource = [
        {percentage:"90 - 100",range:data[0]},
        {percentage:"80 - 89",range:data[1]},
        {percentage:"70 - 79",range:data[2]},
        {percentage:"60 - 69",range:data[3]},
        {percentage:"50 - 59",range:data[4]},
        {percentage:"40 - 49",range:data[5]},
        {percentage:"30 - 39",range:data[6]},
        {percentage:"20 - 29",range:data[7]},
        {percentage:"10 - 19",range:data[8]},
        ];


        $("#overallresult").dxPieChart({
          dataSource:dataSource,
          legend: {
            horizontalAlignment: "center",
            verticalAlignment: "bottom",
            margin: 10
          },
          title: "Number Of Student Between Certain\n Percentage",
          series:{
            
            argumentField:"percentage",
            valueField:"range",
            type:"doughnut",
            innerRadius:0.3,
            label:{
            visible:true,
            connector:{visible:true}

            }
          }
        });
      }
    });


    


});