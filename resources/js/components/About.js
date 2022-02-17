import React from 'react';
import ReactDOM from 'react-dom';
import {Carousel} from '3d-react-carousal';

const About = () => {
    const slides = [
        <img src="/images/carousel/IMG_7832.jpg" alt="1" />,
        <img src="/images/carousel/IMG_1932.jpg" alt="2" />,
        <img src="/images/carousel/IMG_7778.jpg" alt="3" />,
        <img src="/images/carousel/IMG_9066.jpg" alt="4" />,
        <img src="/images/carousel/IMG_7873.jpg" alt="5" />,
    ];

    return (
        <div>
            <Carousel slides={slides} autoplay={false}/>
        </div>
      );
}

export default About;

if (document.getElementById('carousel')) {
    ReactDOM.render(<About />, document.getElementById('carousel'));
}
