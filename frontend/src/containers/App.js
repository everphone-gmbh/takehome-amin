import React from "react";
import Navbar from "../components/Navbar/Navbar";
import { Router } from "react-router-dom";
import history from "../routes/History";
import Routes from "../routes/Routes";
import { IntlProvider } from "react-intl";
import messages from "../assets/Local/messages";
import Loader from "../components/Loader/Loader";
import "./App.scss";
import { useSelector } from 'react-redux';

const App = () => {
    const lang = useSelector( state => state.lang );
    const loading = useSelector( state => state.loading );
    return (
      <IntlProvider locale={lang} messages={messages[lang]}>
        <div
          className={lang === "ar" ? "rtl" : "ltr"}
          dir={lang === "ar" ? "rtl" : "ltr"}
        >
          {loading ? <Loader /> : null}
          <Router history={history}>
            <Navbar />
            {<Routes lang={lang} />}
          </Router>
        </div>
      </IntlProvider>
    );
}

export default App;
