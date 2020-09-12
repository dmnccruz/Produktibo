import {taskData} from './tasksData.js';
import {Calendar} from './calendar.js';


document.addEventListener("DOMContentLoaded", async ()=>{
    const cal = Calendar('calendar');
    cal.bindData(taskData);
    cal.render();
});

