import React from 'react';
import ReactDOM from 'react-dom';

function Photo() {
    return (
        <div className="col">
            <div className="card">
                <div className="card-header">Photo Component</div>
                <div className="card-body">Photo Gallery goes here!</div>
            </div>
        </div>
    );
}

export default Photo;

if (document.getElementById('gallery')) {
    ReactDOM.render(<Photo />, document.getElementById('gallery'));
}