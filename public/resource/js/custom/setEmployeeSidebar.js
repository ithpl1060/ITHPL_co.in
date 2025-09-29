// function setEmployeeSidebar() {
//   var sidebarData = `<ul class="sidebar-menu" data-widget="tree">
//     <li class="header nav-small-cap">Menu Bar</li>`;

//   // console.log('empDetails:', empdetails.feedbackReportFlag);


//   for (var i = 0; i < tabPermission.length; i++) {
//     if (tabPermission[i].is_active == 1) {
//       let hasActivity13 = false;
//       let hasActivity17 = false;
//       let tempSidebarData = "";

//       if (tabPermission[i].is_subtab == 1) {
//         tempSidebarData += `<li class="treeview">
//                 <a href="#">
//                     <i class="${tabPermission[i].icon}"></i> <span>${tabPermission[i].tab_name}</span>
//                     <span class="pull-right-container">
//                         <i class="fa fa-angle-right pull-right"></i>
//                     </span>
//                 </a>
//                 <ul class="treeview-menu" style="display: none;">`;
//       }

//       for (var j = 0; j < activityPermission.length; j++) {
//         if (tabPermission[i].tab_id == activityPermission[j].tab_id) {
//           let activityID = parseInt(activityPermission[j].activity_id);

//           // Always show activity 13
//           if (activityID === 13) {
//             hasActivity13 = true;
//             tempSidebarData += `<li><a href="${base_url + activityPermission[j].url}">
//                         <i class="${activityPermission[j].icon}"></i>${activityPermission[j].activity_title}</a></li>`;
//           }

//           // Show activity 17 only if feedbackReportFlag === 1
//           if (activityID === 17) {
//             hasActivity17 = true;
//             if (empdetails.feedbackReportFlag === 1) {
//               tempSidebarData += `<li><a href="${base_url + activityPermission[j].url}">
//                             <i class="${activityPermission[j].icon}"></i>${activityPermission[j].activity_title}</a></li>`;
//             }
//           }
//         }
//       }

//       if (tabPermission[i].is_subtab == 1) {
//         tempSidebarData += `</ul></li>`;
//       }

//       // Show the tab only if:
//       // - Activity 13 exists
//       // - OR Activity 17 exists & feedbackReportFlag is 1
//       if (hasActivity13 || (hasActivity17 && empdetails.feedbackReportFlag === 1)) {
//         sidebarData += tempSidebarData;
//       }
//     }
//   }

//   sidebarData += `</ul>`;
//   $('.sidebar').html(sidebarData);

// }




// This is original code for sidebar
// function setEmployeeSidebar() {
//   var sidebarData = `<ul class="sidebar-menu" data-widget="tree">
//             <li class="header nav-small-cap">Menu Bar</li>`;
//   console.log('empdetails:', empdetails);
//   // console.log('activityPermission:', activityPermission);
//   console.log('tabPermission:', tabPermission);


//   for (var i = 0; i < tabPermission.length; i++) {
//     if (tabPermission[i].is_active == 1) {
//       if (tabPermission[i].is_subtab == 1) {
//         sidebarData += `<li class="treeview">
//          <a href="#">
//              <i class="${tabPermission[i].icon}"></i> <span>${tabPermission[i].tab_name}</span>
//              <span class="pull-right-container">
//                  <i class="fa fa-angle-right pull-right"></i>
//              </span>
//          </a>
//          <ul class="treeview-menu" style="display: none;">`;
//       }
//       for (var j = 0; j < activityPermission.length; j++) {
//         if (tabPermission[i].tab_id == activityPermission[j].tab_id) {
//           sidebarData += `<li><a href="${base_url + activityPermission[j].url}"><i class="${activityPermission[j].icon}"></i>${activityPermission[j].activity_title}</a></li>`;
//         }//if


//         // console.log(activityPermission[j].activity_title );
//       }//for j


//       if (tabPermission[i].is_subtab == 1) {
//         sidebarData += `</ul></li>`;
//       }

//     }   //if


//   }// for i
//   sidebarData += `</ul>`;

//   $('.sidebar').html(sidebarData);
// }

// setEmployeeSidebar();




function setEmployeeSidebar() {
  var sidebarData = `<ul class="sidebar-menu" data-widget="tree">
              <li class="header nav-small-cap">Menu Bar</li>`;

  for (var i = 0; i < tabPermission.length; i++) {
    if (tabPermission[i].is_active == 1) {
      if (tabPermission[i].is_subtab == 1) {
        sidebarData += `<li class="treeview">
           <a href="#">
               <i class="${tabPermission[i].icon}"></i> <span>${tabPermission[i].tab_name}</span>
               <span class="pull-right-container">
                   <i class="fa fa-angle-right pull-right"></i>
               </span>
           </a>
           <ul class="treeview-menu" style="display: none;">`;
      }
      for (var j = 0; j < activityPermission.length; j++) {
        if (tabPermission[i].tab_id == activityPermission[j].tab_id) {
          sidebarData += `<li><a href="${base_url + activityPermission[j].url}"><i class="${activityPermission[j].icon}"></i>${activityPermission[j].activity_title}</a></li>`;
        }//if


      }//for j
      if (tabPermission[i].is_subtab == 1) {
        sidebarData += `</ul></li>`;
      }

    }   //if


  }// for i
  sidebarData += `</ul>`;

  $('.sidebar').html(sidebarData);
}

setEmployeeSidebar();