import { React, useEffect, useState } from 'react';
import ReactDOM from 'react-dom';
import Axios from 'axios';
import { Carousel } from '3d-react-carousal';

const About = () => {
    const [data, setData] = useState([]);

    useEffect(() => {
        Axios.get('/api/get-carousel')
        .then(res => {
            const items = res.data.map((item) => {
                return <img src={item.src} />
            })
            setData(items)
        })
    }, [])

    return (
        <div>
            <Carousel slides={data} autoplay={false}/>
        </div>
      );
}

export default About;

if (document.getElementById('carousel')) {
    ReactDOM.render(<About />, document.getElementById('carousel'));
}
