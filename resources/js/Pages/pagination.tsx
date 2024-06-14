import { Pagination1 } from "@/Components/pagination/pagination1";

export default function Pagination({ data }: any) {
    return (
        <div className="p-4 ">
            <Pagination1 data={data} />
        </div>
    );
}
