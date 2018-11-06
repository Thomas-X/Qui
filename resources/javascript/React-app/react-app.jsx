import React from "react";
import ReactDOM from "react-dom";

const App = () => {
	let Route = (props) => null;
	switch (JSDATA.component) {
		// check your components here, defined in App.php
	}

	return (
			<div className={'minimumHeight'}>
				<Route/>
			</div>
	);
};

ReactDOM.render(<App/>, document.getElementById("react-container"));