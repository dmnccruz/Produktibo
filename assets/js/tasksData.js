
// export const taskData = [
//     {
//         time: '2020-07-22T21:00:00 Z',
//         cls: 'bg-orange-alt',
//         desc: 'test task'
//     },
//     {
//         time: '2020-07-24',
//         cls: 'bg-orange-alt',
//         desc: 'test task'
//     },
//     {
//         time: '2020-07-22T21:00:00 Z',
//         cls: 'bg-sky-blue-alt',
//         desc: 'test task'
//     },
//     {
//         time: '2020-07-26',
//         cls: 'bg-sky-blue-alt',
//         desc: 'test task'
//     },
//     {
//         time: '2020-08-1',
//         cls: 'bg-sky-blue-alt',
//         desc: 'test task'
//     }
// ];


// export const taskData = [
//     {
//         time: '2020-07-22T21:00:00 Z',
//         cls: 'bg-orange-alt',
//         desc: 'test task'
//     },
//     {
//         time: '2020-07-24',
//         cls: 'bg-orange-alt',
//         desc: 'test task'
//     },
//     {
//         time: '2020-07-22T21:00:00 Z',
//         cls: 'bg-sky-blue-alt',
//         desc: 'test task'
//     },
//     {
//         time: '2020-07-26',
//         cls: 'bg-sky-blue-alt',
//         desc: 'test task'
//     },
//     {
//         time: '2020-08-1',
//         cls: 'bg-sky-blue-alt',
//         desc: 'test task'
//     }
// ];

// export const taskData = [
//     // {
//     //     time: '2020-07-22T21:00:00 Z',
//     //     cls: 'bg-orange-alt',
//     //     desc: 'test task'
//     // },
//     // {
//     //     time: '2020-07-24',
//     //     cls: 'bg-orange-alt',
//     //     desc: 'test task'
//     // },
//     // {
//     //     time: '2020-07-22T21:00:00 Z',
//     //     cls: 'bg-sky-blue-alt',
//     //     desc: 'test task'
//     // },
//     // {
//     //     time: '2020-07-26',
//     //     cls: 'bg-sky-blue-alt',
//     //     desc: 'test task'
//     // },
//     // {
//     //     time: '2020-08-1',
//     //     cls: 'bg-sky-blue-alt',
//     //     desc: 'test task'
//     // }
// ];


var taskDates = JSON.parse(taskDates2.innerHTML);
var taskColors = JSON.parse(taskColors2.innerHTML);
var taskNames = JSON.parse(taskNames2.innerHTML);
var taskData2 = []
// console.log(taskDates.length);

var i;
for (i = 0; i < taskDates.length; i++) {

taskData2.push({
        cls: 'bg-sky-blue-alt',
        time: taskDates[i],
        desc: taskNames[i]
    },)


}

console.log(taskData2)

export const taskData = taskData2



// const taskDates2 = document.getElementById("taskColors");
// const taskColors2 = document.getElementById("taskColors");
// const taskNames2 = document.getElementById("taskColors");



// vartaskcolors = (JSON.parse(taskDates2.innerHTML));
// console.log(JSON.parse(taskColors2.innerHTML));
// console.log(JSON.parse(taskNames2.innerHTML));

// var taskDates = JSON.parse(taskDates2.innerHTML);
// var taskColors = JSON.parse(taskColors2.innerHTML);
// var taskNames = JSON.parse(taskNames2.innerHTML);



// console.log(JSON.parse(taskDates2.innerHTML));
// console.log(JSON.parse(taskColors2.innerHTML));
// console.log(JSON.parse(taskNames2.innerHTML));






// export var taskData



// const taskColors = document.getElementById("taskColors");
// // console.log(taskColors.value);
// console.log(taskColors.value);


// var data = 'asda';

// taskData.push(    {
//     time: '2020-07-25',
//     cls: 'bg-gold-alt',
//     desc: data
// })

// taskData.push(    {
//     time: '2020-07-26',
//     cls: 'bg-sky-blue-alt',
//     desc: 'test add'
// })

// taskData.push(    {
//     time: '2020-07-26',
//     cls: 'bg-sky-blue-alt',
//     desc: 'test add'
// })

// taskData.push(    {
//     time: '2020-07-26',
//     cls: 'bg-sky-blue-alt',
//     desc: 'test add'
// })
// taskData.push(    {
//     time: '2020-07-26',
//     cls: 'bg-sky-blue-alt',
//     desc: 'test add'
// })

// console.log("asd");
