import highway from '@dogstudio/highway';
import Fade from './transition.js'

const H=new highway.Core({
    transitions:{
        default:Fade
    }
});

app.get('/', (req,res)=>{
res.render('School', {layout: false});
})
