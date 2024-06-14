import Table1 from "@/Components/table/table1";

export default function Table({ data }: any) {
    return (
        <div className="flex p-4">
            <Table1 data={data} />
        </div>
    );
}
