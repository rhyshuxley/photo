import React from 'react';
import ReactDOM from 'react-dom';
import ScrollAnimation from 'react-animate-on-scroll';
import "animate.css/animate.min.css";

const Gear = () => {
  return (
    <ScrollAnimation animateIn="fadeIn" animateOnce={true}>
      <div className="container d-flex justify-content-center">
        <div className="d-flex flex-row">
          <div className="col-sm d-flex align-items-center justify-content-center">
            <img src="/images/gear/IMG_8293.jpg" className="mx-auto d-block gear-photo" alt="logo" />
          </div>
          <div class="col-sm d-flex align-items-center justify-content-center flex-column">
            <h4>Canon 90D</h4>
          </div>
        </div>
      </div>
    </ScrollAnimation>
  );
};

export default Gear;

if (document.getElementById('gear')) {
  ReactDOM.render(<Gear />, document.getElementById('gear'));
}
