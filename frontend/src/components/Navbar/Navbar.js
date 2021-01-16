import React from "react";
import messages from "./../../assets/Local/messages";
import { useSelector, useDispatch } from "react-redux";
import { setCurrentLang } from "../../store/Lang/LangAction";
import { Link } from "react-router-dom";
import { Btn } from "../Controls/Button/Button";

export default function Navbar() {
	const lang = useSelector(state => state.lang);
	const dispatch = useDispatch();
	const message = messages[lang];
	const switchLanguage = lang => {
		dispatch(setCurrentLang(lang === "fa" ? "en" : "fa"));
	};

	return (
		<>
			<nav className="navbar navbar-dark bg-dark">
				<p className="navbar-brand">{message.hello}</p>
				<div className="d-flex align-items-center">
				{/* This private route won't be accessible if no token in lcoal storage */}
				<Link to={`/${lang}`} className="text-white mx-3">
					Private Route
				</Link>
				<Btn
					handleClick={() => switchLanguage(lang)}
					text={message.langBtn}
				/>
				</div>
			</nav>
		</>
	)
}
