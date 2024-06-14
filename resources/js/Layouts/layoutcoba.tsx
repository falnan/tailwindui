import { useRef, useState } from "react";

export default function Layout() {
    // const [value, setValue] = useState(true);
    const value = useRef(true);
    function handleClick() {
        // setValue(!value);
    }
    return <div></div>;
}
