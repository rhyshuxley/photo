import React from 'react';
import ScrollAnimation from 'react-animate-on-scroll';
import "animate.css/animate.min.css";

const GearItem = (item) => {
  return (
    <ScrollAnimation animateIn="fadeIn" animateOnce={true}>
      <div className="container d-flex justify-content-center js-scroll">
        <div className={item.data.classes}>
          <div className="col-sm d-flex align-items-center justify-content-center">
            <img src={item.data.photo} className="js-scroll mx-auto d-block gear-photo" alt="logo" />
          </div>
          <div className="col-sm d-flex align-items-center justify-content-center flex-column">
            <h4>{item.data.name}</h4>
          </div>
        </div>
      </div>      
    </ScrollAnimation>
  );
};

export default GearItem;
