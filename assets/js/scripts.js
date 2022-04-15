// var fetch_async = async function(url, param = {}, swal = true) {
//     if(!("headers" in param)){
//         param.headers =  {
//               //'Accept': 'application/json , text/plain, /',
//            // 'Content-Type': 'application/json , multipart/form-data',
//             'X-Requested-With': 'XMLHttpRequest',
//         };
//     }else{
//         param['headers']['X-Requested-With'] = "XMLHttpRequest";
//     }

//     if(!("method" in param)){
//         param.method = 'get';
//     }

//     if( ("body" in param)){
//         if(param.method === 'get'){
//             url = url+'?';
//             $.each(param.body , function (index, value){
//                 let v = index+"="+value+"&";
//                 if(typeof value === 'object'){
//                     v = "";
//                     $.each(value ,function(i, d){
//                         //v += index+"["+i+"]="+d+"&";
//                         v += index+"[]="+d+"&";
//                     });
//                 }
//                 url += v;
//             }); // get n'a pas besoin de 'body'
//             delete param.body;
//         }else{ // post
//             param.body = JSON.stringify(param.body);
//         }
//     }

//   return  await  fetch(url,param)
//                  .then(response => {
//                      let result = response.json();
//                      let status = response.status;
//                      let msg = result.statusText;
//                      if (!response.ok) {
//                         if(swal){
//                             result.then(data => {
//                                      alert(data,status,msg);
//                                     });
//                         }
//                         throw new Error(msg);
//                     }
//                      return result;
//                 })
// };




$(function(){
     $("#button-add-question").on("click", function(e){
          


     })
      
})

