import React from 'react';
import ReactDOM from 'react-dom';
import {Carousel} from '3d-react-carousal';

const About = () => {
    const slides = [
        <img src="/images/main/003.jpg" alt="1" />,
        <img src="/images/main/004.jpg" alt="2" />,
        <img src="/images/main/006.jpg" alt="3" />,
        <img src="/images/main/008.jpg" alt="4" />
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
